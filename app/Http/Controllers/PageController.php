<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\InvoiceItem;
use App\Customer;

class PageController extends Controller
{
    public function getCustomer(Request $request)
    {
        $search_tag = $request->get('search_tag');
        $query = Customer::orderBy('id', 'desc');
        if(!empty($search_tag)){   
            $query->where('id', 'LIKE', '%'.$search_tag.'%'); 
            $query->orwhere('name', 'LIKE', '%'.$search_tag.'%');
            $query->orwhere('phone', 'LIKE', '%'.$search_tag.'%');
            $query->orwhere('email', 'LIKE', '%'.$search_tag.'%');
            $query->orwhere('address', 'LIKE', '%'.$search_tag.'%');  
        }

        $customers = $query->paginate(10);
        
        return view('frontend.index')->withCustomers($customers);
    }

    public function getInvoice(Request $request)
    {
        $search_tag = $request->get('search_tag');
        $query = Invoice::orderBy('invoices.id', 'desc');
        //dd($query);
        
        if(!empty($search_tag)){ 
            $query->leftJoin('customers as c', 'c.id', '=', 'invoices.customer_id')->where('c.name', 'LIKE', '%'.$search_tag.'%');
            $query->leftJoin('customers as cu', 'cu.id', '=', 'invoices.customer_id')->orwhere('cu.phone', 'LIKE', '%'.$search_tag.'%');  
            $query->orwhere('invoices.id', 'LIKE', '%'.$search_tag.'%');
            $query->orwhere('customer_id', 'LIKE', '%'.$search_tag.'%');
            $query->orwhere('title', 'LIKE', '%'.$search_tag.'%');
            $query->orwhere('total', 'LIKE', '%'.$search_tag.'%');
            $query->orwhere('date', 'LIKE', '%'.$search_tag.'%');  
        }

        $invoices = $query->paginate(10);
        
        return view('frontend.invoice')->withInvoices($invoices);
    }
}
