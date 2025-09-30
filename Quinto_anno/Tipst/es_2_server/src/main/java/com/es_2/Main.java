package com.es_2;

import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;

public class Main {
    public static void main(String[] args) throws IOException {
        System.out.println("ServerSoket listening in localhost:3000");
        ServerSocket ss = new ServerSocket(3000);
        Socket mySocket = ss.accept();  //in ascolto aspettando collegamento di qualcuno
        System.out.println("Someone connected");

        ss.close(); //server chiuso
    }
}