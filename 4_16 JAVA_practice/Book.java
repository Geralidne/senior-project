/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sample;

import java.time.LocalDate;

/**
 *
 * @author User
 */
public class Book {
    
    // 屬性
    // 公開的物件成員
    public int id;
    public String name;
    public double price;
    // 私有的物件成員
    private double cost;
    private LocalDate date = LocalDate.now();
    
    
    // 方法：物件行為、操作
    // [存取修飾字]     [修飾字]     方法型別                   方法名稱(參數列){...}
    // public(公開)    static      void(無回傳值)                (方法簽章)
    // private(私有)   abstract    int、double、String...
    //                final        (有回傳值需加 return)
    
    // 物件成員、無回傳值、無參數方法
    public void display(){
        System.out.println("id：" + id);
        System.out.println("name：" + name);
        System.out.println("price：" + price);
        System.out.println("cost：" + cost);
        System.out.println("date：" + date);
    }
    
    // 物件成員、無回傳值、有參數方法
    public void setCost(double c){  // c 是方法的參數
        if(c >= 0){
            cost = c;   // 將參數 c 的值指定給物件成員 cost
        }else{
            cost = 0.0;
        }
    }
    
}
