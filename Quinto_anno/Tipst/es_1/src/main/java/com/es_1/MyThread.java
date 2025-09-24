package com.es_1;

import java.util.concurrent.ThreadLocalRandom;

public class MyThread extends Thread{

    private String nome;

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
            Thread.sleep(ThreadLocalRandom.current().nextInt(1000, 5000));
        } catch (Exception e) {
            System.out.println("ERRORE");
        }
        System.out.println(this.nome + " è arrivato! ");
    }

   
}