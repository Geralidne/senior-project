/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package com.sample;

/**
 *
 * @author User
 */
public class MainClass {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        // 呼叫物件成員方法 display()，要先建立 Book 物件
        // 類別型別 參考名稱 = new 建構子();
        Book book = new Book();
        // 先觀察物件中的屬性的值
        System.out.println("物件剛建立時...");
        // 呼叫物件成員方法 display()
        book.display();
        System.out.println("--------------------");
        // 物件建立後變更屬性的值
        book.id = 1;
        book.name = "Java SE 11";
        book.price = 600;
        // book.cost = 500;     // cost has private access in Book
        book.setCost(500);        
        System.out.println("物件建立後變更屬性的值...");
        book.display();
        System.out.println("--------------------");
        
        
    }
    
}
