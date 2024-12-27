<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoanService;
use DB;
use Log;
class LoanController extends Controller
{
	
	public function __construct(
      protected LoanService $loanService
    ) {
    }
	
	/* START Loan Details Function */
	
    public function loan(LoanService $loan) {
		
		$loan_details = $this->loanService->getLoanDetails();
		
		return view('loan')->with('loan_details',$loan_details);
	}
	
	/* END Loan Details Function */
	
	/* START Loan EMI Function */
	
	public function loanEMI() {
		return view('loan_emi_cal');
	}
	
	public function getLoanEMIDetails($id = '') { 
	
		$loan_emi_details = '';
		
		$emi_column_name = DB::connection() // Get the EMI Detail table column list
            ->getSchemaBuilder()
            ->getColumnListing('emi_details');
		unset($emi_column_name[0]); // Remove Auto Increment ID,Client ID
		unset($emi_column_name[1]);
		sort($emi_column_name); // Column Order By Month Wise. 
				
		if($id == '') {
			$loan_emi_details = $this->loanService->getLoanEMIDetails(); // Load All Client EMI Details
		} else {
			$loan_emi_details = $this->loanService->getLoanEMIDetail($id); // Get single Client EMI Detail
		}
		
		return view('loan_emi')->with('loan_emi_details',$loan_emi_details)->with('emi_column_names',$emi_column_name);
	}
	
	public function getLoanEMICalculator() { 
	
		$loan_emi_details = '';
		
		$emi_column_name = DB::connection() // Get the EMI Detail table column list
            ->getSchemaBuilder()
            ->getColumnListing('emi_details');
		unset($emi_column_name[0]); // Remove Auto Increment ID,Client ID
		unset($emi_column_name[1]);
		sort($emi_column_name); // Column Order By Month Wise. 
	
		$loan_emi_details = $this->loanService->getLoanEMIDetails(); // Load All Client EMI Details
		
		return view('loan_emi_cal')->with('loan_emi_details',$loan_emi_details)->with('emi_column_names',$emi_column_name);
	}
	
	/* END EMI Functions */
	
}
