a,b=gets.split.map(&:to_i)

diff=b-a
sum=0
for i in 1..diff do
  sum +=i
end
puts sum - b

