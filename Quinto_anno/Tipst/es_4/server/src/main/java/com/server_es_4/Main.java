package com.server_es_4;
import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
//Server
public class Main {
    public static void main(String[] args) throws IOException {

        System.out.println("Server socket in ascolto sulla porta 3000");
        ServerSocket ss = new ServerSocket(3000);   //apro server socket sulla porta 3000
        
        do{

            Socket myS = ss.accept();                        //crea un socket in ascolta da server, accept blocca, finche qualcuno non si collega alla porta 3000
            System.out.println("Qualuno si è collegato " + myS.getInetAddress());

            MyThread t = new MyThread(myS);

            t.start();

        }while(true);
        
        
    }
}