package com.es_2_client;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
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

        BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));
        PrintWriter out = new PrintWriter(socket.getOutputStream(), true);

        out.println("Ciao Emma!!!");
        socket.close();
    }
}