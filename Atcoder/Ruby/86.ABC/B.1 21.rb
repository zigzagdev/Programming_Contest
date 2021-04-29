a,b=gets.split.map(&:to_s)

sum=a+b
change=sum.to_i
result=Math.sqrt(change).to_i

if(change%result==0)
  puts "Yes"
else
  puts "No"
end
