package com.es_1;

import java.util.concurrent.ThreadLocalRandom;

public class MyThread extends Thread{

    private String nome;
    private double time;

    public MyThread(String nome){

        this.nome = nome;
    }

    //GET E SET

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    //METODI

    @Override
    public void run(){
        try {
            time = ThreadLocalRandom.current().nextInt(1000, 5000);
            Thread.sleep((int)time);
        } catch (Exception e) {
            System.out.println("ERRORE");
        }
        System.out.println(this.nome + " è arrivato in tempo " + (time/1000) + " secondi");
    }

   
}