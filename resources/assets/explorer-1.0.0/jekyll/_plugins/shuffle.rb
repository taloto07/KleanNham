module Jekyll
  module ShuffleFilter
    def shuffle(array)
      array.to_a.shuffle
    end
  end
end

Liquid::Template.register_filter(Jekyll::ShuffleFilter)