#include<bits/stdc++.h>
using namespace std;
int fibo(int n)
{
   if (n<2){
      return 1;
   }
   return fibo(n-1)+fibo(n-2);
}
int main ()
{
   freopen("in.in","r",stdin);
   freopen("out.out  ","w",stdout);
   int t;
   scanf("%d",&t);
   int n ;
   while (t--){
      scanf ("%d",&n);
      printf("%d\n",fibo(n));
   }

}
