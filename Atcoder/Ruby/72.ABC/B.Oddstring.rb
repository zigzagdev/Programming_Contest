x=gets.chomp.to_s

x.each_char.with_index{|c, index|
  print c if index % 2 == 0 }
