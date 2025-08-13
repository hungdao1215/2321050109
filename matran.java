package matran;
import java.util.Scanner;
public class matran {
    public static void main(String[] args) {
    	int m;
    	int n;
        Scanner scanner = new Scanner(System.in);
        System.out.print("Nhập số hàng của ma trận (m): ");
        m = scanner.nextInt();
        System.out.print("Nhập số cột của ma trận (n): ");
        n = scanner.nextInt();
        int[][] mt = new int[m][n];
        System.out.println("Nhập các phần tử của ma trận:");
        for (int a = 0; a < m; a++) {
            for (int b = 0; b < n; b++) {
                System.out.print("Phần tử [" + a + "][" + b + "]: ");
                mt[a][b] = scanner.nextInt();
        System.out.println("Ma trận vừa nhập :");
        for (int a = 0; a < m; a++) {
            for (int b = 0; b < n; b++) {
                System.out.print(mt[a][b] + " ");
            }
            
    }
        System.out.println();
            }
            int sum = 0;
            for (int a = 0; a < m; a++) {
                for (int b = 0; b < n; b++) {
                    sum += mt[a][b];
                }
            }
            System.out.println("Tổng các phần tử của ma trận : " + sum);
}
}
}
