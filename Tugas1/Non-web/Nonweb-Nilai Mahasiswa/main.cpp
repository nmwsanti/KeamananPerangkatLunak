#include <stdio.h>
#include <iostream>
#include <conio.h>

using namespace std;

int main()
{
char nama[25],*Grade;
float nPartisipan, nTugas, nUTS, nUAS, nAkhir;
cout<<"Program Hitung Nilai Akhir Siswa";
cout<<" Masukkan Nama Siswa : ";gets(nama);
cout<<" Nilai Partisipan     : ";cin>>nPartisipan;
    if (nPartisipan<0){
        cout<<"Nilai Partisipan tidak boleh negatif!";
        return 0;
    }
cout<<" Nilai Tugas         : ";cin>>nTugas;
    if (nTugas<0){
        cout<<"Nilai Tugas tidak boleh negatif!";
        return 0;
    }
cout<<" Nilai UTS           : ";cin>>nUTS;
    if (nUTS<0){
        cout<<"Nilai UTS tidak boleh negatif!";
        return 0;
    }
cout<<" Nilai UAS           : "; cin>>nUAS;
    if (nUAS<0){
        cout<<"Nilai UAS tidak boleh negatif!";
        return 0;
    }

nAkhir=((2*nPartisipan)+(3*nTugas)+(2*nUTS)+(3*nUAS))/10;
if(nAkhir>=85&&nAkhir<=100)
    {
    Grade="A";
    }
    else if(nAkhir>=80&&nAkhir<=85)
        {
        Grade="A-";
        }
    else if(nAkhir>=75&&nAkhir<=80)
        {
        Grade="B+";
        }
    else if(nAkhir>=70&&nAkhir<=75)
        {
        Grade="B";
        }
    else if(nAkhir>=65&&nAkhir<=70)
        {
        Grade="B-";
        }
    else if(nAkhir>=60&&nAkhir<=65)
        {
        Grade="C+";
        }
    else if(nAkhir>=55&&nAkhir<=60)
        {
        Grade="C";
        }
    else if(nAkhir>=40&&nAkhir<=55)
        {
        Grade="D";
        }
    else if(nAkhir>=0&&nAkhir<=40)
        {
        Grade="E";
    }

cout<<endl;
cout<<"     Siswa Yang Bernama "<<nama<<endl;
cout<<"     Nilai Murni Partisipan         : "<<nPartisipan<<endl;
cout<<"     Nilai Murni Tugas              : "<<nTugas<<endl;
cout<<"     Nilai Murni UTS                : "<<nUTS<<endl;
cout<<"     Nilai Murni UAS                : "<<nUAS<<endl;
cout<<"     Memperoleh Nilai Akhir Sebesar : "<<nAkhir<<endl;
cout<<"     Grade yang di dapat            : "<<Grade<<endl;
getch();
}
