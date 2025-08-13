package matran;
public class bai1 {
    
    public static boolean isPrime(int n) {
        if (n <= 1) {
            return false;
        }
        for (int i = 2; i <= Math.sqrt(n); i++) {
            if (n % i == 0) {
                return false;
            }
        }
        return true;
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Nhập số lượng phần tử của mảng: ");
        int n = scanner.nextInt();
        int[] arr = new int[n];
        
        System.out.println("Nhập các phần tử của mảng:");
        for (int i = 0; i < n; i++) {
            arr[i] = scanner.nextInt();
        }

        Integer maxPrime = null;  // Sử dụng Integer để kiểm tra nếu không có số nguyên tố

        for (int num : arr) {
            if (isPrime(num)) {
                if (maxPrime == null || num > maxPrime) {
                    maxPrime = num;
                }
            }
        }

        if (maxPrime != null) {
            System.out.println("Phần tử lớn nhất là số nguyên tố trong mảng: " + maxPrime);
        } else {
            System.out.println("Không có số nguyên tố trong mảng.");
        }

        scanner.close();
    }
}
