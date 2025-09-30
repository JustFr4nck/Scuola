package com.es_2_client;

import java.io.IOException;
import java.net.Socket;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) throws IOException{
        System.out.println("Inserisci ip del server");
        Scanner input = new Scanner(System.in);
        String ip = input.nextLine();


        System.out.println("Inserisci porta del server");
        Integer port = input.nextInt();

        Socket socket = new Socket(ip, port);
        System.out.println("Connessione effettuata");
    }
}