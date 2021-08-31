#include<iostream>
#include<conio.h>
#include<string.h>

using namespace std;

int main (){
    int p,l,t;
    //proses input p,l,t

    cout<<"Menghitung Volume dan Luas Permukaan Balok\n\n";
    cout<<"\tMasukkan nilai P\t       =     ";cin>>p;
        if (p<0){
        cout<<"Nilai Panjang tidak boleh negatif!";
        return 0;
    }
    cout<<"\tMasukkan nilai L\t       =     ";cin>>l;
        if (l<0){
        cout<<"Nilai Lebar tidak boleh negatif!";
        return 0;
    }
    cout<<"\tMasukkan nilai T\t       =     ";cin>>t;
        if (t<0){
        cout<<"Nilai Tinggi tidak boleh negatif!";
        return 0;
    }
    cout<<endl;

    //proses perhitungan

    float v;
    v=p*l*t;
    float Lp;
    Lp=(2*p*l)+(2*p*t)+(2*l*t);

    //proses output

    cout<<"Jawaban :"<<endl<<endl;
    cout<<"\tVolume Balok adalah\t\t =     "<<v<<endl<<endl;
    cout<<"\tLuas Permukaan Balok adalah\t\t = "<<Lp<<endl<<endl;
    cout<<"SELESAI";

getch();
}
