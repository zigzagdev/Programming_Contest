a,b,c=gets.split(" ").map &:to_i

if(a==0&&b==1)
  puts '2'
elsif(a==1&&b==2)
  puts '0'
elsif(a==0&&b==2)
  puts '1'
elsif(a==1&&b==0)
  puts '2'
elsif(a==2&&b==0)
  puts '1'
elsif(a==2&&b==1)
  puts '0'
else(a==b&&b==c)
puts a
end  
