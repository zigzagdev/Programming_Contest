a,b,c,d = gets.split(" ").map &:to_i

if(c*d-b<0 ||c*d-b==0 )
  puts -1
else
  puts (a.to_f / (c * d - b)).ceil
end  
