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
        // 呼叫公開的操作介面(方法)，指定 cost 的值
        book.setCost(500);        
        System.out.println("物件建立後變更屬性的值...");
        book.display();
        System.out.println("--------------------");
        
        // 呼叫有回傳值的方法時，需要有後續的操作
        // 1. 宣告區域變數 newPrice 取得回傳的值
        double newPrice  = book.getNewPrice(1.5);
        System.out.println("1. 建議售價：" + newPrice);
        // 2. 將回傳的資料直接輸出
        System.out.println("2. 建議售價：" + book.getNewPrice(1.5));
        System.out.println("--------------------");
        
        Book book1 = new Book();
        book1.id = 2;
        book1.name = "Python 3.9";
        book1.price = 600;
         
        Book book2 = new Book();
        book2.id = 3;
        book2.name = "Java SE 11";
        book2.price = 700;
        
        book1.display();
        book2.display();
        System.out.println("-------------------");
        
        Book book3 = new Book();
        book3.setFields(2, "Python 3.9", 600, 500);
        
        Book book4 = new Book();
        book4.setFields(3, "Java SE 11", 700, 600);
        
        book3.display();
        book4.display();
        System.out.println("-------------------");
        
        Book book5 = new Book(2, "Python 3.9", 600, 500);
        Book book6 = new Book(3, "Java SE 11", 700, 600);
        book5.display();
        book6.display();
        
        
        
        
        
    }
    
}
