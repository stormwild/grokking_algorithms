#include <stdio.h>

#define MAX 7

int getSmallest(int[], int, int);
void swap(int[], int, int);
void selectionSort(int list[], int lo, int hi);


int getSmallest(int list[], int lo, int hi) {
    int small = lo;
    for (int h = lo + 1; h <= hi; h++) 
        if(list[h] < list[small]) small = h;
    return small;
}

void swap(int list[], int i, int j) {
    int hold = list[i];
    list[i] = list[j];
    list[j] = hold;
}

void selectionSort(int list[], int lo, int hi) {
    for (int h = lo; h < hi; h++) {
        swap(list, h, getSmallest(list, h, hi));
    }
}

int main() {
    int num[MAX] = {15, 33, 48, 65, 57, 79, 52};
    // print the unsorted set of numbers
    for (int i = 0; i < MAX; i++) printf("%d ", num[i]);
    printf("\nSort starting ...\n");
    selectionSort(num, 0, MAX - 1);
    printf("Sort has ended. \n");
    for (int i = 0; i < MAX; i++) printf("%d ", num[i]);
    printf("\n");
    return 0;
}