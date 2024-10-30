<!-- 2. Encapsulation with Getters and Setters

	•	Task: Create a class called BankAccount with a private property balance initialized to 0. 
    Add methods deposit($amount) and withdraw($amount) to add to or subtract from the balance, 
    and a getBalance() method to return the current balance. 
    Ensure that withdraw($amount) checks if there is enough balance before proceeding.
    -->
<?php 
class BankAccount {
    private $balance = 0;

    public function deposit($num) {
        echo "Deposit {$num} on the account. <br>";
        $this->balance += $num;
    }

    public function withdraw($num) {

        if ($num > $this->balance) {
            echo "Not enough funds to get this money. <br>";
        } else {
            $this->balance -= $num;
            echo "Withdraw {$num} from balance. <br>";
        }
    }

    public function getBalance() {
        echo "Your balance is {$this->balance}!";
    }
}

$account = new BankAccount;
$account->deposit(300);
$account->deposit(300);
$account->deposit(300);
$account->deposit(300);
$account->deposit(300);
$account->deposit(300);
$account->deposit(300);
$account->deposit(300);
$account->deposit(300);
$account->deposit(300);
$account->deposit(300);
$account->withdraw(30000);
$account->getBalance();