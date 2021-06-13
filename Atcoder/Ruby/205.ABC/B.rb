n=gets.to_i
a=gets.split.map(&:to_i).sort
aa=a.uniq

if(a==aa)
  puts "Yes"
else
  puts "No"
end  
