a,t=gets.split.map(&:to_i)
homework=gets.split.map(&:to_i).sum

if(a>=homework)
  puts a-homework
else
  puts -1
end  

