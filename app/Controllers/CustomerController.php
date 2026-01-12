<?php



class CustomerController extends Controller
{
    private $modelCustomer;
    public function __construct()
    {
        $this->modelCustomer = new Customer();
    }
    public function index()
    {
        $customers = $this->modelCustomer->getAll();

        require_once './views/customers/index.php';
    }
}