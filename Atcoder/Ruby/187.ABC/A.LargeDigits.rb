a,b=gets.split

a1=a.split('').map(&:to_i).sum
b1=b.split('').map(&:to_i).sum

if(a1>=b1)
  puts a1
else
  puts b1
end
