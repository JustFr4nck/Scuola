package com.es_3_server;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;

public class Main {
    public static void main(String[] args) throws IOException {
        System.out.println("ServerSoket listening in localhost:3000");
        ServerSocket ss = new ServerSocket(3000);
        Socket mySocket = ss.accept();  //in ascolto aspettando collegamento di qualcuno
        System.out.println("Someone connected");

        BufferedReader in = new BufferedReader(new InputStreamReader(mySocket.getInputStream()));
        PrintWriter out = new PrintWriter(mySocket.getOutputStream(), true);
        String message = in.readLine();
        System.out.println("Message receaved: " + message);

        out.println("Welcome to server V3.1");

        String fraseRicevuta = in.readLine().toUpperCase();
        out.println(fraseRicevuta);
        ss.close(); 
    }
}