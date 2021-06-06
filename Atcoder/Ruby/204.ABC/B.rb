n=gets.to_i
nuts=gets.split.map(&:to_i)

select=nuts.select {|a| a>10}

puts select.sum-select.length*10
