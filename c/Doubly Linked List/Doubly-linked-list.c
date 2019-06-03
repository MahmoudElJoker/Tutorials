#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

/* Doubly Linked List */
/*
doubly linked list have 2 links
1 for the next node.
the other for the previous node.
---------------------------
doubly linked list useful for Reverse look-up.
example:-
      prev  val  next       prev  val  next       prev  val  next      prev  val  next
     -----------------     -----------------     -----------------    -----------------
<--- |  0  | 10 | 204 | ->  |200 | 15 | 208 | ->  |204 | 13 |2012 | -> |208 | 30 | 0  | --->
|    -----------------     -----------------     -----------------    -----------------    |
|          addr                  addr                  addr                 addr           |
NULL       200                   204                   208                  2012          NULL

so as it shown in the example next = NULL and prev = NULL.
but the element between first and last element will hold the address of next node and previous node.
and that done by an algorithm like this:-
newNode->data = value;
newNode->prev = NULL;
if(head == NULL)
newNode->next = NULL;
head = newNode;
else
current = head;
current->prev = newNode;
newNode->next = head;
head = newNode;

*/
/**
operations
1- insert an element at beginning of the list
2- insert an element at end of the list
3- display elements of list
4- delete last element in the list
5- delete first element in the list
7- insert an element to the list in a specific position.
8- delete an element from the list by its position.
**/

int Length = 0;

typedef struct Node {
	int data;
	struct Node * next;
	struct Node * prev;
}PtrNode;

/* set default values for pointers */
PtrNode* head = NULL;
PtrNode* current = NULL;
PtrNode* tail = NULL;
PtrNode* delNode = NULL;

/*---------------------------*/
/* function prototype        */
/*---------------------------*/
// insert an element at the begining of the list
void insertElementAtF(int value); 
//insert an element at the end of the list
void insertElementAtE(int value);
//delete last element from the list 
void deleteLastElement();
//delete first element from the list
void deleteFirstElement();
//display the list
void displayList();
//display the list in reverse order
void displayListInRevOrder();
//insert an element in a specific position
void insertInPos(int value,int pos);
//delete an element by its position
void deleteByPos(int pos);
/*---------------------------*/
/*---------------------------*/

/*
**Very Important** 
If you DO NOT want to have a memory leak
when you declare a typedef of struct like this
typedef struct Node{}*ptrNode;
be careful and DO NOT use ptrNode as pointer to allocate a new memory in the heap
'cause the pointer will only have 8 bytes, but maybe the struct has more than that
so you will have a memory leak 'cause the space that allocated lower than what it should be.
so it's better to make a normal object and then use the astrec sign to make a pointer to
that object for new objects.
*/


int main() {
    //printf("size of Node: %d\n", sizeof(PtrNode) );
    /*
	insertElementAtF(9);
	
	insertElementAtF(12);
	
	insertElementAtF(15);
	insertElementAtF(65);
	insertElementAtF(11);
	insertElementAtF(33);
*/
    
    insertElementAtE(57);
    insertElementAtE(25);
 
    insertElementAtE(13);
    
    insertElementAtE(98);
    printf("Length: %d\n",Length);
    displayList();
    deleteByPos(4);
    insertInPos(800,4);
	insertElementAtE(7);
	insertElementAtE(56);
    insertElementAtE(952);
    insertElementAtE(968);
    insertElementAtE(793);
    
    //displayList();
    //deleteFirstElement();
   
  // printf("Length : %d\n\n",Length);
   displayList();
   displayListInRevOrder();
    /*
	deleteLastElement();
	deleteLastElement();
	deleteLastElement();
    deleteLastElement();
    */
	//displayList();
	
	//deleteFirstElement();
	
	
	printf("\n\n");
	system("pause");
	return 0;
}

void insertElementAtF(int value) {
	PtrNode* newValue = (PtrNode*)malloc(sizeof(PtrNode));
	newValue->data = value;
	newValue->prev = NULL;
	if (head == NULL) {
		newValue->next = NULL;
		head = newValue;
		tail = head;
	}
	else {
		if (tail->next != NULL)
		tail = tail->next;

		head->prev = newValue;
		newValue->next = head;
		head = newValue;
	}
	Length++;
}

void insertElementAtE(int value) {
	PtrNode* newNode = (PtrNode*)malloc(sizeof(PtrNode));
	newNode->data = value;
	newNode->next = NULL;
	if (head == NULL) {
		newNode->prev = NULL;
		head = newNode;
	}
	else {
		newNode->prev = tail;
        tail->next = newNode;
        
		/*another way to implement this method*/
		/*
		current = head;
		while (current->next != NULL) {
			current = current->next;
		}
		newNode->prev = current;
		current->next = newNode;
		*/
	}
    tail = newNode;
    Length++;
}

void insertInPos(int value , int pos){
    if( (pos > Length + 1) || pos <= 0){
        printf("error Position MUST be positive number, and not larger than length of the list. \n");
    }else{
PtrNode* newNode = (PtrNode*)malloc(sizeof(PtrNode));
newNode->data = value;

if (pos == 1){
 
    if(head == NULL){
       
    newNode->next = NULL;
    newNode->prev = NULL;
    head = newNode;
    tail = head;
    }
    else if(head->next == NULL){
    
    current = head;
    newNode->next = current;
    newNode->prev = NULL;
    head = newNode;
    current->prev = newNode;
    tail = current;

    }else{
    
    current = head;
    newNode->next = current;
    newNode->prev = NULL;
    head = newNode;
    current->prev = newNode;
    }
 
  }
else if(pos == Length){

newNode->next = tail;
newNode->prev = tail->prev;
current = tail->prev;
tail->prev = newNode;
current->next = newNode;

} 

else if(pos == Length + 1){
  newNode->next = NULL;
  newNode->prev = tail;
  tail->next = newNode;
  tail = newNode;
}


else{
    int average = Length / 2;
    PtrNode* temp = NULL;
    if(pos > average){
    current = tail;
    int size = Length - pos;
    while(current != NULL && size > 0){
     current = current->prev;
     temp = current->prev;
     size--;
    }

 }else{
    current = head;
    while(current->next != NULL && pos > 1){
      temp = current;
      current = current->next;
      pos--;
    }

  }
      
      newNode->next = current;
      newNode->prev = current->prev;
      current->prev = newNode;
      temp->next = newNode;
      
    
  }
  Length++;
    }
}

void deleteByPos(int pos){
if(pos > Length || pos <= 0)
 printf("there no element in this position, or may the list is empty!.\n");
 else{
if (pos == 1){
   if(head->next == NULL){
    delNode = head;
    head = tail = NULL;
    free(delNode);

    }else{
    delNode = head;
    head = head->next;
    head->prev = NULL;
    free(delNode);
    }
 
  }
else if(pos == Length){
delNode = tail;
tail = tail->prev;
tail->next = NULL;
free(delNode);
} 
else{
    int average = Length / 2;
    PtrNode* temp = NULL;
    if(pos > average){
    current = tail;
    int size = Length - pos;
    while(current != NULL && size > 0){
     current = current->prev;
     temp = current->prev;
     size--;
    }

 }else{
    current = head;
    while(current->next != NULL && pos > 1){
      temp = current;
      current = current->next;
      pos--;
    }

  }
      
    delNode = current;
    current = current->next;
    current->prev = temp;
    temp->next = current;
    free(delNode);
    
    }
    Length--;
 }

}

void deleteLastElement() {	
	if (head == NULL) 
		printf("List is empty..\n");
	else if (head->next == NULL) {
		free(head);
        head = NULL;
        Length--;
	}
	else {
	
		delNode = tail;
		tail = tail->prev;
		tail->next = NULL;
		free(delNode);
		Length--;
		/*another way to implement this method*/
		/*
		current = head;
		while (current->next != NULL) {
			current = current->next;
		}
		
		delNode = current;
		current = current->prev;
		current->next = NULL;
	    free(delNode);
		*/
	}
  
}

void deleteFirstElement() {
	if (head == NULL)
		printf("List is empty..\n");
	else if (head->next == NULL) {
		free(head);
        head = NULL;
        Length--;
	}
	else {
		delNode = head;
		head = head->next;
		head->prev = NULL;
        free(delNode);
        Length--;
	}

}


void displayList() {
	if (head == NULL)
		printf("List is empty..\n");
	else if(head->next == NULL)
		printf("%d \n", head->data);
	else {
        current = head;
        printf("Nodes: \n");
		while (current != NULL) {
            printf("%d \n", current->data);
            current = current->next;
            
        }

	}


}
void displayListInRevOrder() {
	if (head == NULL)
		printf("List is empty..\n");
	if (head->next == NULL)
		printf("%d \n", head->data);
	else {
		current = tail;
		/*another way to implement it*/
		/*
		current = head;
		while (current->next != NULL)
			current = current->next;
		*/
		printf("Nodes: \n");
		while (current != NULL) {
			printf("%d \n", current->data);
			current = current->prev;
		}


	}
}