include Math

kes = gets.to_i

arr = kes.times.map{gets.chomp.to_i}.sort.reverse

result = 0
arr.each_with_index do |r, i|
  if i % 2 == 0
    result += r ** 2
  else
    result -= r ** 2
  end
end
puts result * Math::PI
