a=gets.to_i
m=gets.split(" ").map &:to_i
n=gets.split(" ").map &:to_i

sum= 0;
a.times do |i|
  sum +=m[i]*n[i]
end

if(sum==0)
  puts 'Yes'
else
  puts 'No'
end
