#include<bits/stdc++.h>
using namespace std;
int countDiv(int n )
{
   int ret=0;
   for (int i=1;i*i<=n;i++){
      if(n%i==0){
         if (i*i==n){
            ret+=1;
         }
         else{
            ret+=2;
         }
      }
   }
   return ret;
}
int main ()
{
   freopen("in.in","r",stdin);
   freopen("correctoutput.out","w",stdout);
   int t,n;
   scanf("%d",&t);
   while(t--){
      scanf("%d",&n);
      printf("%d\n",countDiv(n));
   }
}
