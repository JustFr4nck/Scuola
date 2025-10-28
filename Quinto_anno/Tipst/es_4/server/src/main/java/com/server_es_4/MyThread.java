package com.server_es_4;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;

public class MyThread extends Thread {
    
    private Socket s;
    
        public MyThread(Socket s){
    
            this.s = s;
    }

    @Override
    public void run(){

        BufferedReader in;
        try {
            in = new BufferedReader(new InputStreamReader(s.getInputStream()));
            PrintWriter out = new PrintWriter(s.getOutputStream(), true);
            out.println("Welcome to server v2.1");

        do {
            String fraseReceived = in.readLine();
            if (fraseReceived == null) {
                break;
            }
        
            if(fraseReceived.equals("!")){
                break;
            }

            fraseReceived = fraseReceived.toUpperCase();
            System.out.println(fraseReceived);
            out.println(fraseReceived);
        
        } while (true);
        } catch (IOException e) {
            e.printStackTrace();
        }
        
        System.out.println("Utente Disconnesso");
        try {
            s.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
        


    }
}
