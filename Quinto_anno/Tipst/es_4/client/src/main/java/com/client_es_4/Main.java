package com.client_es_4;

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
        Integer port = Integer.parseInt(input.nextLine());

        Socket socket = new Socket(ip, port);
        System.out.println("Connessione effettuata");

        BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));
        PrintWriter out = new PrintWriter(socket.getOutputStream(), true);

        String firstMessage = in.readLine();
        System.out.println("Stringa ricevuta: " + firstMessage);

        do{
            System.out.println("Inserire parola da convertire");
            String myFrase = input.nextLine();

            out.println(myFrase);

            if(myFrase.equals("exit") || myFrase.equals("EXIT")){
                System.out.println("server in uscita");
                out.println("!");
                break;
            }

            String upperFrase = in.readLine();

            System.out.println(upperFrase);
        }while(true);
        
        System.out.println("Cominicazione terminata");
        socket.close();
    }
}