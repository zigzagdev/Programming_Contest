n=gets.to_i

sum=n.digits.sum

if(n%sum==0)
  puts 'Yes'
else
  puts 'No'
end
