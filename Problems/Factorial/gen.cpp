#include<bits/stdc++.h>
using namespace std;
long long factorial(long long n )
{
   if (n==0){
      return 1;
   }
   return n*factorial(n-1);
}
int main ()
{
   freopen("in.in","r",stdin);
   freopen("correctoutput.out","w",stdout);
   int t;
   long long n;
   scanf("%d",&t);
   while(t--){
      scanf("%lld",&n);
      printf("%lld\n",factorial(n));
   }
   return 0;
}
