package com.es_1;

public class MyThread extends Thread{

    private String nome;
    private int pos;

    public MyThread(String nome, int pos){

        this.nome = nome;
        this.pos = pos;
    }

    //GET E SET

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

     public int getPos() {
        return pos;
    }

    public void setPos(int pos) {
        this.pos = pos;
    }

    //METODI

    @Override
    public void run(){

        System.out.println(this.nome + " è arrivato in posizione " + this.pos);
    }

   
}