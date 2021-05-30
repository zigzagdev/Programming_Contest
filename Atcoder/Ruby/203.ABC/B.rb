a,b=gets.split.map(&:to_i)

sum=0
(1..a).each do |i|
  (1..b).each do |j|

    sum += i*100+j
  end
end
p sum
