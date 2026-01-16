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

        $view = 'customers/index.php';

        require_once PATH_VIEW . 'layouts/main.php';
    }

    public function showEditView()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET" && isset($_GET['id'])) {
            $customerId = htmlspecialchars($_GET['id']);
            $customer = $this->modelCustomer->getOneById($customerId);
            $view = 'customers/edit.php';
            require_once PATH_VIEW . 'layouts/main.php';
        }
    }

    public function createCutomer()
    {
        $view = 'customers/create.php';

        require_once PATH_VIEW . 'layouts/main.php';
    }

    public function storedCutomer()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['createCustomer'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
            $birth = htmlspecialchars($_POST['birth']);
            $img = htmlspecialchars($_POST['img']);
            $status = isset($_POST['status']) ? 1 : 0;

            $data = [
                'name' => $name,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'birth' => $birth,
                'img' => $img,
                'status' => $status
            ];

            $result = $this->modelCustomer->create($data);
            if ($result > 0) {
                header("Location:" . APP_URL . '?act=customers');
            }
        }
    }

    public function updateCutomer()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['updateCustomer'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
            $birth = htmlspecialchars($_POST['birth']);
            $img = htmlspecialchars($_POST['img']);
            $status = isset($_POST['status']) ? 1 : 0;
            $id = htmlspecialchars($_POST['id']);

            $data = [
                'name' => $name,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'birth' => $birth,
                'img' => $img,
                'status' => $status,
                'id' => $id,
            ];

            $result = $this->modelCustomer->update($data);
            if ($result > 0) {
                header("Location:" . APP_URL . '?act=customers');
            }
        }
    }

    public function deleteCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET" && isset($_GET['id'])) {
            $customerId = htmlspecialchars($_GET['id']);
            $result = $this->modelCustomer->delete($customerId);
            if ($result > 0) {
                header("Location:" . APP_URL . '?act=customers');
            };
        }
    }

    public function searchCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET" && !empty($_GET['keyword'])) {
            $keyword = htmlspecialchars($_GET['keyword']);
            $customers = $this->modelCustomer->search($keyword);
            $view = 'customers/searchPage.php';
            require_once PATH_VIEW . 'layouts/main.php';
        }
    }
}
