#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
#define bool char
#define true 1
#define false 0
#define null 0

/* singly linked list */
/**
operations
1- delete an element last in the list x
2- display elements of list x
3- insert an element at beginning of the list x
4- insert an element at end of the list x
5- check the length of the list x
6- check if the list is empty x
7- delete an element from the list by its value x
8- delete an element from the list by its position x
9- search of an element in the list by its position x
10- delete an element 1st element in the list x
**/
struct list{
int data;
struct list * next;
};

typedef struct list * List;

List head = null;
List current = null;
List temp = null;


/* check if the list is empty */
bool isEmpty(){
if(head == null)
    return true;
else
    return false;
}


/* calculate the length of the list */
int Length(){
int count = 0;
if(head != null && head->next == null)
    count = 1;
else{
    current = head;
    while(current != null ){
            count++;
        current = current->next;
    }
}
return count;
}

/* display list elements */
void displayList(){
if(isEmpty())
    printf("List is empty!\n");
else if(Length() == 1)
    printf("%d",head->data);
else{
 current = head;

 while(current != null){
    printf("%d ,",current->data);
    current = current->next;
 }
}
}

/* insert an element at the end of list */
void insertElement(int value){
    temp = (List) malloc(sizeof(List));
    temp->data = value;
    temp->next = null;
if(isEmpty())
head = temp;
else{
    current = head;
while(current -> next != null){
 current = current->next;
}
current->next = temp;
}
}

/* insert an element at beginning of list */
void insertElementAtF(int value){
temp = null;
temp = (List) malloc(sizeof(List));
temp->data = value;
temp->next = head;
head = temp;
}

/* search of an element by its position */
void searchByPos(int pos){
if(isEmpty())
    printf("List is empty!\n");
else if(pos > Length() || pos <= 0)
    printf("this position isn't found in the list..");
else if(pos == 1)
printf("%d",head->data);
else{
current = head;
int count = 1;
while(current != null && count != pos){
count++;
current = current->next;
}
printf("%d",current->data);
}
}

/* delete 1st element of list */
void delElmentAtB(){
List Del = null;
if(isEmpty())
printf("List is empty!\n");
else if (Length() == 1){
    Del = head;
    head = null;
    free(Del);
}
else{
Del = head;
head = head->next;
free(Del);
}
}

/* delete last element of list */
void delElementAtE(){
List Del = null;
if(isEmpty())
printf("List is empty!\n");
else if (Length() == 1){
    Del = head;
    head = null;
    free(Del);
}
else{
current = head;
while(current->next != null){
    temp = current;
    current = current->next;
}
Del = current;
current = temp;
current->next = null;
free(Del);
}
}

/* delete an element by its value */
void DelByValue(int value){
List Del = null;
List temp2 = null;
if(isEmpty())
printf("List is empty!\n");
else if(Length() == 1){
    Del = head;
    head = null;
    current = null;
    free(Del);
 }
else{
current = head;
while(current->next != null && current->data != value){
    temp = current;
    current = current->next;
}
if (current->data != value)
    printf("there no such a value in list..\n");
else{
Del = current;
if(current == head){
    head = head->next;
}
else{
    if(current->next != null){
    temp2 = current->next;
    current = temp;
    current->next = temp2;
    }
    else{
    current = temp;
    current->next = null;
    }
}

free(Del);
}
}
}


/* delete an element by its position */
void DelByPos(int pos){
List Del = null;
List temp2 = null;
if(isEmpty())
printf("List is empty!\n");
else if(Length() == 1){
    Del = head;
    head = null;
    current = null;
    free(Del);
 }
else{
current = head;
int count = 1;
while(current->next != null && count != pos){
    count++;
    temp = current;
    current = current->next;
}
if (count != pos)
    printf("this position does NOT exists..\n");
else{
Del = current;
if(current == head){
    head = head->next;
}
else{
    if(current->next != null){
    temp2 = current->next;
    current = temp;
    current->next = temp2;
    }
    else{
    current = temp;
    current->next = null;
    }
}

free(Del);
}
}
}

int main(){
  
    insertElement(5);
    insertElement(50);
    insertElement(6);
    insertElement(20);
    insertElementAtF(10);
    displayList();
    delElmentAtB();
	displayList();
    delElementAtE();
	displayList();
    DelByPos(5);
	displayList();
    DelByValue(6);
    displayList();
    printf("\n%d",Length());
    printf("\n");
    searchByPos(3);
	system("pause");

return 0;
}
