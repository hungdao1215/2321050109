package matran;
import java.util.Scanner;
public class Scanner {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		System.out.print("Nhap so phan tu trong mang:");
		int n = sc.nextInt();
		int[] array = new int[n];
		System.out.println("Nhap cac phan tu cua mang:");
		for(int i = 0; i < n; i++)
		{
			System.out.print("Phan tu thu " + (i + 1) + ": ");
			array[i] = sc.nextInt();
		}
	}

}
