a=gets.chomp
t=gets.chomp

i=0
count=0
while i<a.size do
  if a[i]!=t[i]
    count +=1
  end
  i +=1
end
puts count
