package com.es_1;

import java.util.Scanner;

public class App {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        int x;
        String result;

        System.out.println("\n___CORSA DI CAVALLI___");

        while (true) {
            x = 0;
            System.out.println("\nINSERIRE QUANTI CAVALLI PARTECIPERANNO ALLA CORSA (DA 5 A 10): ");
            if (input.hasNextInt()) {

                x = input.nextInt();
                if (x >= 5 && x <= 10) {

                    break;
                }
            }

            System.err.println("\nERRORE: INSERIRE UN VALORE NUMERICO DA 5 A 10");
        }

        MyThread[] arr = new MyThread[x];

        for (int i = 0; i < x; i++) {
            arr[i] = new MyThread("CAVALLO " + ( i+1 ), i);
            arr[i].start();
        }
    }
}
