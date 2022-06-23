kes = gets.to_i
fuji = gets.split.map(&:to_i)


for i in 0..2000
  unless fuji.include?(i)
    p i
    break
  end
end
