n=gets.to_i
nuts=gets.split.map(&:to_i)

select=nuts.select {|a| a>10}

puts select.sum-select.length*10


n=gets.to_i
nuts=gets.split.map(&:to_i)

result=0
nuts.each do |i|
  if i > 10
    result+=i-10
  end
end
puts result
