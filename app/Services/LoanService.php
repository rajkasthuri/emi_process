<?php

namespace App\Services;
use App\Interfaces\LoanRepositoryInterface;
use Log;

class LoanService
{
    public function __construct(
        protected LoanRepositoryInterface $loanRepository
    ) {
    }
	
	public function getLoanDetails()
    {
        return $this->loanRepository->loadLoanDetails();
    }
	
	public function getLoanEMIDetails() {
		
		return $this->loanRepository->loadLoanEMIDetails();
	}
	
	public function getLoanEMIDetail($id) {
				
		return $this->loanRepository->getEMIDetail($id);
	}
	
}