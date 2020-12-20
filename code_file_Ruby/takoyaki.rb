n, x, t = gets.chomp.split(' ').map(&:to_i)

result = n % x == 0 ? (n / x) : (n / x + 1)

puts result * t