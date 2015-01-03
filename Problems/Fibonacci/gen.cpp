#include<bits/stdc++.h>
using namespace std;
int fibo (int n){
   if (n<2){
      return n;
   }
   return fibo(n-1)+fibo(n-2);
}
int main ()
{
   freopen("in.in","r",stdin);
   freopen("correctoutput.out","w",stdout);
   int t;
   scanf ("%d",&t);
   while (t--){
      int x;
      scanf("%d",&x);
      printf("%d\n",fibo(x));
   }
}
