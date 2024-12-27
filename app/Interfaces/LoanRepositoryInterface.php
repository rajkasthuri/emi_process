<?php

namespace App\Interfaces;

interface LoanRepositoryInterface 
{
    public function loadLoanDetails();
	public function loadLoanEMIDetails();
	public function getEMIDetail($id);
   
}