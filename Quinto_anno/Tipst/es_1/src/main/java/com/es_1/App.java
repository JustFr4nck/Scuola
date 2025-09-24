package com.es_1;

import java.util.Scanner;

public class App {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        int x;
        System.out.println("\n___CORSA DI CAVALLI___");

        while (true) {
            int tmp;
            System.out.println("\nINSERIRE QUANTI CAVALLI PARTECIPERANNO ALLA CORSA (DA 5 A 10): ");
            if (input.hasNextInt()) {

                tmp = input.nextInt();
                if (tmp >= 5 && tmp <= 10) {
                    x = tmp;
                    break;
                }
            }
            else{

                input.nextLine();

            }

            System.err.println("\nERRORE: INSERIRE UN VALORE NUMERICO DA 5 A 10");
        }

        MyThread[] arr = new MyThread[x];

        System.out.println("___CLASSIFICA___");
        for (int i = 0; i < x; i++) {
            arr[i] = new MyThread("CAVALLO " + (i + 1));
            arr[i].start();
        }

        

        for(int i = 0; i < x; i++){
            try {
                arr[i].join();
            } catch (Exception e) {
                System.out.println("ERROR");
            }
        }
        
    }
}
