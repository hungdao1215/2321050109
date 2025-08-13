package matran;

class BankAccount {
    private String accountNumber;
    private String accountHolder;
    private double balance;

    // Constructor
    public BankAccount(String accountNumber, String accountHolder, double balance) {
        this.accountNumber = accountNumber;
        this.accountHolder = accountHolder;
        this.balance = balance;
    }

    // Phương thức kiểm tra số dư
    public double getBalance() {
        return balance;
    }

    // Phương thức nạp tiền
    public void deposit(double amount) {
        if (amount > 0) {
            balance += amount;
            System.out.println("Nạp tiền thành công! Số dư hiện tại: " + balance);
        } else {
            System.out.println("Số tiền nạp phải lớn hơn 0.");
        }
    }

    // Phương thức rút tiền
    public void withdraw(double amount) throws Exception {
        if (amount <= 0) {
            throw new Exception("Số tiền rút phải lớn hơn 0.");
        } else if (amount > balance) {
            throw new Exception("Số dư không đủ để rút tiền!");
        } else {
            balance -= amount;
            System.out.println("Rút tiền thành công! Số dư hiện tại: " + balance);
        }
    }
}