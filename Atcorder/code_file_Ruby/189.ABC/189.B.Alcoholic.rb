n, x = gets.chomp.split(' ').map(&:to_i)
x = x * 100

sum = 0
ans = -1

(1..n).each do |i|
  v, p = gets.chomp.split(' ').map(&:to_i)
  sum += v * p
  if sum > x
    ans = i
    break
  end
end
puts ans
