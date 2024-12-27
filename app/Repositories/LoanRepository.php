<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\LoanDetail;
use App\Models\EmiDetail;
use App\Interfaces\LoanRepositoryInterface;
use DB;
use DateTime;
use Log;

class LoanRepository implements LoanRepositoryInterface
{
    public function loadLoanDetails()
    {
        return LoanDetail::all();
    }
	
	public function loadLoanEMIDetails() {
		
		$drop_table = DB::statement('DROP TABLE IF EXISTS `emi_details`');
		$loan_details = DB::select("select * from loan_details");
		$current_date_time = date('Y-m-d H:i:s');
		$new_emi_table_create = DB::statement("CREATE TABLE emi_details (
				id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
				client_id int(11),
				updated_at datetime
				)");
		
		foreach ($loan_details as $loan_detail) {
			
			DB::insert("insert into emi_details (client_id,updated_at) values (?,?)", [$loan_detail->clientid,$current_date_time]);
			$load_list_of_months = $this->getListOfEMIMonths($loan_detail->first_payment_date,$loan_detail->last_payment_date);
			$emi_amount = $loan_detail->loan_amount / $loan_detail->num_of_payment;
			$emi_amount = round($emi_amount,2);
			$i = 1;
			foreach ($load_list_of_months as $load_list_of_month) {
				
				$month_col = date('Y-m', strtotime($load_list_of_month->emi_date));
				DB::statement("ALTER TABLE emi_details ADD COLUMN IF NOT EXISTS `$month_col` VARCHAR(50) DEFAULT 0.0"); // Add dynamic month column
				if($i == $loan_detail->num_of_payment) { // EMI Amount Adjusted Check if the last EMI or not
					$emi_amount_adjust = $i - 1;
					$emi_amount_adjust = abs($emi_amount_adjust);
					$emi_amount_adjust = $emi_amount_adjust * $emi_amount;
					$emi_amount = $loan_detail->loan_amount - $emi_amount_adjust;
				}
				DB::update("UPDATE emi_details SET `$month_col` = ? WHERE client_id = ?",[$emi_amount,$loan_detail->clientid]);
				$i++;
			}
		}
		
		return DB::table('emi_details')->get();
	}
	public function getListOfEMIMonths($star_date,$end_date) {
		
		$res = DB::select("select emi_date from (WITH RECURSIVE
loan_details AS (
SELECT ? start, ? `end`
),
cte AS ( SELECT start, `end`, 
                1 rownum, DATE_FORMAT(start, '%Y-%m-%d') emi_date
         FROM loan_details
         UNION ALL
         SELECT start, `end`, 
                1 + rownum, DATE_FORMAT(start + INTERVAL rownum MONTH, '%Y-%m-%d')
         FROM cte
         WHERE start + INTERVAL rownum - 1 MONTH < `end` )
         
SELECT emi_date
FROM cte
ORDER BY rownum) as emi_date",[$star_date,$end_date]);
		return $res;
	}
	
	public function getEMIDetail($id) {
	
		return EmiDetail::where('client_id',$id)->get();
	}
}